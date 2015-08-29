Form = {
    form: null,
    form_array: {},
    next_el: '.next',
    back_el: '.back',
    current_el: '.current',
    group_el: '.form-group',
    init: function (form) {
        this.form = $(form);
        $(this.back_el+','+this.next_el).click(this.save.bind(this));
        $(this.back_el).click(this.back.bind(this));
        $(this.next_el).click(this.next.bind(this));
    },
    save: function () {
        data = this.form.serializeArray();
        _.each(data, function(field){
            this.form_array[field['name']] = field.value;
        }.bind(this));
    },
    back: function (e){
        var current = this.get_current_group();
        var last_page = this.get_prev_group();
        this.transition(current, last_page);
    },
    next: function (e){
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
    Form.init('#registration');
})
