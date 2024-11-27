import de app.cs naar de app.cs in je project: @import '../../../vendor/remco/inno-styles/src/resources/css/app.css';
import de app.js naar de app.js in je project: import '../../../vendor/remco/inno-styles/src/resources/js/app.js';
publish de views: php artisan vendor:publish --provider="Remco\InnoStyles\InnoStylesServiceProvider" --tag="inno-styles-views"
