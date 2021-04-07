import React from "react";
import ReactDOM from "react-dom";
import "../css/style.css";

// Our modules / classes
import MobileMenu from "./modules/MobileMenu";
import HeroSlider from "./modules/HeroSlider";
import GoogleMap from "./modules/GoogleMap";
import Search from "./modules/Search";
import MyNotes from "./modules/MyNotes";
import Like from "./modules/Like";

// Instantiate a new object using our modules/classes
var mobileMenu = new MobileMenu();
var heroSlider = new HeroSlider();
const googleMap = new GoogleMap();
const search = new Search();
const mynotes = new MyNotes();
const like = new Like();

//Our React Code
function OurFirstComponent() {
    return <div>{/* <h1>Hello world!</h1>
            <p>The sky is blue,and the grass is green.</p> */}</div>;
}
ReactDOM.render(<OurFirstComponent />, document.querySelector("#app"));

// Allow new JS and CSS to load in browser without a traditional page refresh
if (module.hot) {
    module.hot.accept();
}
