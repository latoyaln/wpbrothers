// Updated tailwind.config.js
module.exports = {
  content: ["./**/*.{php,ts,js,twig}"],
  corePlugins: {
    preflight: false, // Disable preflight
  },
  theme: {
    container: {
      center: true,
      padding: "1rem",
      screens: {
        sm: "100%",
        md: "100%",
        lg: "1024px",
        xl: "1148px",
        "2xl": "1148px",
      },
    },
    fontFamily: {
      heading: ['"Roboto", sans-serif'],
      body: ['"Open Sans", sans-serif'],
      icon: ['"Font Awesome 6 Free"'],
    },
    colors: {
      primary: {
        DEFAULT: "#ff470b",
      },
      font: {
        DEFAULT: "#191919",
        body: "#344054",
        placeholder: "#98A2B3",
      },
      neutral: {
        0: "#fff",
        5: "#f5f5f5",
        25: "#eeeeee",
        50: "#c2c8cf",
        75: "#686c73",
        100: "#353c45",
      },
      base: {
        300: "#FFA370",
        500: "#FF470B",
      },
      white: {
        DEFAULT: "#ffffff",
      },
      black: {
        DEFAULT: "#000000",
      },
    },
    extend: {
      fontSize: {
        h1: ["4.5rem", { lineHeight: "4.5rem", fontWeight: 700 }],
        h2: ["3rem", { lineHeight: "2.5rem", fontWeight: 700 }],
        h3: ["2.25rem", { lineHeight: "3.5rem", fontWeight: 700 }],
        h4: ["1.3125rem", { lineHeight: "1.3125rem", fontWeight: 700 }],
        h5: ["1.125rem", { lineHeight: "1.125rem", fontWeight: 700 }],
        h6: ["1rem", { lineHeight: "1.5rem", fontWeight: 700 }],
        p: [
          "0.9375rem",
          { lineHeight: "1.5rem", letterSpacing: "0.2px", fontWeight: 400 },
        ],
        tag: ["0.75rem", { lineHeight: "1rem", fontWeight: 700 }],
      },
      aspectRatio: {
        "4/3": "4 / 3",
        "3/4": "3 / 4",
      },
    },
  },
};
