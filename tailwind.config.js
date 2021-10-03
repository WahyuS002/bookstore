module.exports = {
    mode: "jit",
    purge: ["./resources/**/*.blade.php"],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                primary: "#222439",
            },
            boxShadow: {
                soft: "0 0 20px rgba(0, 0, 0, 0.08)",
            },
            fontFamily: {
                poppins: ["poppins"],
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
