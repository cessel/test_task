import JSDOM from "../node_modules/jsdom/lib/api.js"
const { window } = new JSDOM( "" );
import $ from "../node_modules/jquery/dist/jquery.min.js";

console.log($);
console.log(jQuery);