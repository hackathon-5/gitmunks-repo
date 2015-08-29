Form = {
    form: null,
    form_array: {},
    next_el: '.next',
    back_el: '.back',
    current_el: '.current',
    group_el: '.form-group',
    complete_el: '.complete',
    tabbable_el: 'input.tabbable',
    init: function (form) {
        this.form = $(form);
        $(this.back_el+','+this.next_el).click(this.save.bind(this));
        $(this.back_el).click(this.back.bind(this));
        $(this.next_el).click(this.next.bind(this));
        $(this.complete_el).click(this.save_to_db.bind(this));
        $(this.tabbable_el).on('keydown', this.handle_button.bind(this));
        this.update_nav();
    },
    /**
     * The user can tab to the next page
     * @param e
     */
    handle_button: function (e) {
        var keyCode = e.keyCode || e.which;

        if (keyCode == 9) {
            e.preventDefault();
            this.next(e);
            this.save();
        }
    },
    /**
     * Save the data locally so we can eventually persist it in the db
     */
    save: function () {
        data = this.form.serializeArray();
        _.each(data, function(field){
            this.form_array[field['name']] = field.value;
            this.insert(field.name, field.value);
        }.bind(this));

    },
    /**
     * Persist the form
     * @param e
     */
    save_to_db: function (e) {
        var url = $(e.currentTarget).data('url');
        $.ajax({
            url:url,
            data: this.form_array,
            type: 'POST'
        })
    },
    /**
     * Used to insert our captured data back into the form
     * @param field
     * @param value
     */
    insert: function (field, value){
        $('[data-insert="'+field+'"]').html(value.trim());
    },
    /**
     * Move back in the form flow
     * @param e
     */
    back: function (e){
        e.preventDefault();
        var current = this.get_current_group();
        var last_page = this.get_prev_group();
        this.transition(current, last_page);
    },
    /**
     * Move forward in the form flow
     * @param e
     */
    next: function (e){
        e.preventDefault();
        var current = this.get_current_group();
        var next_page = this.get_next_group();
        this.transition(current, next_page);
    },
    /**
     * Get the currently displayed group of form elements
     * @returns {*|jQuery|HTMLElement}
     */
    get_current_group: function () {
        return $(this.current_el);
    },
    /**
     * Look ahead and get the next group of form elements
     * Probably to display them
     * @returns {*|jQuery}
     */
    get_next_group: function () {
        return $(this.current_el).next(this.group_el);
    },
    /**
     * Look back and get the previous form elements
     * @returns {*|jQuery}
     */
    get_prev_group: function () {
        return $(this.current_el).prev(this.group_el);
    },
    /**
     * Transition the user from one form group to another
     * @param current
     * @param next
     */
    transition: function (current, next){
        if(this.is_valid(current)) {
            $(current).removeClass('current')
            $(next).addClass('current');
            this.update_nav();
            $(current).fadeOut(400, function (el) {
                $(next).fadeIn(500, function (el) {
                    $('input:first-of-type').focus();
                }.bind(this));
            }.bind(this))
        }
    },
    /**
     * Simple validation for empty fields
     * TODO - make this more robust, Better insertion into the page.
     * @param current
     * @returns {boolean}
     */
    is_valid: function (current) {
        error = false;
        $(current).find('input').each(function (i, el){
            if($(el).val() == ''){
                alert('Please enter a value for '+$(el).attr('name'));
                error = true;
            }
        });
        if(error) {
            return false;
        }
        return true;
    },
    /**
     * Hide or show next button based on other buttons on the page
     * TODO - make this smarter. too much going on here.
     */
    update_nav: function () {
        show = [];

        if(this.get_prev_group().is('*')) {
            show.push(this.back_el);
        }

        if(!this.get_next_group().is('*') || $(this.current_el+' .complete').is('*') || $(this.current_el+' .hide_nav').is('*')){
            show = [];
        }else{
            show.push(this.next_el);
        }

        $(this.back_el+','+this.next_el).hide()
        show.push('.hide_nav');
        show.push('.complete');
        $(show.join(',')).each(function (i, el){
            $(el).fadeIn();
        });

    }

}

Rating = {
    rating_el: '.plus-link:not(.rated)',
    comment_points: '.comment_points',
    user_points: '.user_points',
    init: function () {
        $(this.rating_el).click(this.rate.bind(this));
    },
    /**
     * Rate a comment
     * This will increment the users rating who wrote the comment
     * and the comment's rating
     * @param e
     */
    rate: function (e) {
        e.preventDefault();
        var button = $(e.currentTarget);
        button.off();
        this.comment = button.closest('.comment');
        data = {}
        data.comment_id = this.comment.find(this.rating_el).data('comment-id');
        data.user_id = this.comment.find(this.rating_el).data('user-id');
        $.ajax({
            url: '/comments/rate',
            data: data,
            success: this.success.bind(this),
            dataType: 'json',
            type: 'POST'
        });
    },
    /**
     * We have successully updated the rating, now let's update the view
     * @param data
     */
    success: function(data){
        if(data.id){
            this.comment.find(this.rating_el).addClass('rated');
            this.comment.find(this.comment_points).html(data.rating_count);
            this.comment.find(this.user_points).html('+'+data.user.rating_count);
        }else{
            alert('Trek is off track. Please reload the page and try to rate again!');
        }
    }
}

Menu = {
    toggleProfile: 'header #profile',
    profileMenu: '.profile-menu',
    init: function() {
        $(this.toggleProfile).click(this.toggleMenu.bind(this));
    },
    toggleMenu: function(){
        $(this.profileMenu).slideToggle("fast");
    }
}

Scroll = {
    scroll: 0,
    init: function(){
        $(window).scroll(this.scrolled.bind(this));
    },
    scrolled: function(){
        this.scroll = $(window).scrollTop();
        if (this.scroll > 0){
            $('header').fadeOut('fast');
        } else if(this.scroll === 0) {
            $('header').fadeIn('fast');
        }
    }
}

$(document).ready(function () {
    if($('#registration').is('*')){
        Form.init('#registration');
    }else if($('#add').is('*')){
        Form.init('#add');
    }

    Menu.init();
    Rating.init();

    if($('body').hasClass('home')){
         Scroll.init();
    }
    $(".post .question").text(function(index, currentText) {
        return currentText.substr(0, 70)+'...';
    });
});


