const { JSDOM } = require( "../node_modules/jsdom/lib/api.js" );
const { window } = new JSDOM( "" );
const $ = require( "../node_modules/jquery/dist/jquery.min.js" )( window );

console.log($);
console.log(jQuery);