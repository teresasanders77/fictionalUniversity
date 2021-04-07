wp.blocks.registerBlockType("teresa/border-box", {
    title: "My Cool Border Box",
    icon: "smiley",
    categor: "common",
    attributes: {
        content: { type: "string" },
        color: { type: "string" }
    },
    edit: function (props) {
        return React.createElement(
            "div",
            null,
            wp.element.createElement("h3", null, "Your Cool Border Box"),
            React.createElement("input", {
                type: "text"
            })
        );
    },
    save: function (props) {
        return null;
    }
});
