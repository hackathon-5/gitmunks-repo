Form = {
    form: null,
    form_array: {},
    next_el: '.next',
    back_el: '.back',
    current_el: '.current',
    group_el: '.form-group',
    complete_el: '.complete',
    init: function (form) {
        this.form = $(form);
        $(this.back_el+','+this.next_el).click(this.save.bind(this));
        $(this.back_el).click(this.back.bind(this));
        $(this.next_el).click(this.next.bind(this));
        $(this.complete_el).click(this.save_to_db.bind(this));
        $('input.tabbable').on('keydown', this.handle_button.bind(this));
    },
    handle_button: function (e) {
        var keyCode = e.keyCode || e.which;

        if (keyCode == 9) {
            e.preventDefault();
            this.next(e);
            this.save();
        }
    },
    save: function () {
        data = this.form.serializeArray();
        _.each(data, function(field){
            this.form_array[field['name']] = field.value;
            this.insert(field.name, field.value);
        }.bind(this));

    },
    save_to_db: function (e) {
        var url = $(e.currentTarget).data('url');
        $.ajax({
            url:url,
            data: this.form_array,
            type: 'POST'
        })
    },
    insert: function (field, value){
        $('[data-insert="'+field+'"]').html(value.trim());
    },
    back: function (e){
        e.preventDefault();
        var current = this.get_current_group();
        var last_page = this.get_prev_group();
        this.transition(current, last_page);
    },
    next: function (e){
        e.preventDefault();
        var current = this.get_current_group();
        var next_page = this.get_next_group();
        this.transition(current, next_page);
    },
    get_current_group: function () {
        return $(this.current_el);
    },
    get_next_group: function () {
        return $(this.current_el).next(this.group_el);
    },
    get_prev_group: function () {
        return $(this.current_el).prev(this.group_el);
    },
    transition: function (current, next){
        $(current).fadeOut(400, function (el) {
            $(current).removeClass('current')
            $(next).fadeIn(function (el) {
                $(next).addClass('current')
            }.bind(this));
        }.bind(this))
    }

}

$(document).ready(function () {
    if($('#registration').is('*')){
        Form.init('#registration');
    }else if($('#add').is('*')){
        Form.init('#add');
    }
})
