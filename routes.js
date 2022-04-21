const About = (resolve) => {
    require.ensure(["./components/About"], () => {
        resolve(require("./components/About"));
    },"User");
};
const Contact = (resolve) => {
    require.ensure(["./components/Contact"], () => {
        resolve(require("./components/Contact"));
    },"User");
};
const Maps = (resolve) => {
    require.ensure(["./components/Maps"], () => {
        resolve(require("./components/Maps"));
    },"User");
};
