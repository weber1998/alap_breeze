import IngatlanokController from "./controller/ingatlanokController.js";

class App {
  constructor() {
    new IngatlanokController();
  }
}

$(function () {
  new App();
});