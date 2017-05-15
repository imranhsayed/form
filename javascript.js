/**
 * Created by ghafir on 12/05/17.
 */

(function () {
    $( 'html' ).addClass( 'js' );

    var contactForm = {
        form: $( '#contact' ),

        init: function () {
            this.createContactBtn();
            this.createCloseBtn();
            $( 'button' ).on( 'click', this.showForm );
            $( '.close-button').on( 'click', this.hideForm );
        },

        createContactBtn: function () {
            $( '<button></button>', {
                text: 'Contact Me'
            } ).insertAfter( 'article' );
        },

        showForm: function () {
            contactForm.form.fadeIn( 500 );
        },

        hideForm: function () {
            contactForm.form.fadeOut( 500 );
        },

        createCloseBtn: function () {
            var h2 = $( 'div.contact-form' ).find( 'h2' );
            $( '<button></button>', {
                text: 'X',
                class: 'close-button'
            } ).appendTo( h2 );
        }
};
    contactForm.init();
})();
