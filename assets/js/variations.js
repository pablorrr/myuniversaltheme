import { __ } from '@wordpress/i18n';
wp.domReady(function () {
    /**
     * Set the default text color on the Quote block.
     */
    wp.blocks.registerBlockVariation(
        'core/quote',
        {
            name: 'primary-quote',
            title: 'Green Quote',
            description: __( 'Make it green' ),
            isDefault: true,
            attributes: {
                textColor: 'green',
                className: 'is-style-primary-quote'
            }
        },
    );
});
