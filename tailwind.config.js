module.exports = {
    purge   : [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: 'class', // or 'media' or 'class'
    theme   : {
        backgroundColor: theme => ({
            ...theme( 'colors' ),
            'button': '#263238'
        }),
        textColor      : theme => ({
            ...theme( 'colors' ),
            'button': '#263238'
        }),
        extend         : {},
    },
    variants: {
        extend: {},
    },
    plugins : [],
}
