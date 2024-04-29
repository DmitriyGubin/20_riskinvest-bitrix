var x_point = Number($('#lat_off').html());
var y_point = Number($('#long_off').html());
var adress_point = $('#addr_off').html();

var delta = 0;
if(screen.width < 1000)
{
    delta = 0.005;
}

ymaps.ready(init);

function init () 
{
			var myMap = new ymaps.Map("contacts_map", {
				center: [x_point + delta,y_point],
				zoom: 15,
				controls: [],//без элементов управления
			}, {
				searchControlProvider: 'yandex#search'
			}),
    // Создание макета содержимого хинта.
    // Макет создается через фабрику макетов с помощью текстового шаблона.
    HintLayout = ymaps.templateLayoutFactory.createClass( "<div class='my-hint'>" +
    	"{{ properties.address }}" +
    	"</div>", {
                // Определяем метод getShape, который
                // будет возвращать размеры макета хинта.
                // Это необходимо для того, чтобы хинт автоматически
                // сдвигал позицию при выходе за пределы карты.
                getShape: function () {
                	var el = this.getElement(),
                	result = null;
                	if (el) {
                		var firstChild = el.firstChild;
                		result = new ymaps.shape.Rectangle(
                			new ymaps.geometry.pixel.Rectangle([
                				[0, 0],
                				[firstChild.offsetWidth, firstChild.offsetHeight]
                				])
                			);
                	}
                	return result;
                }
            }
            );

//https://yandex.ru/dev/maps/jsbox/2.1/icon_customImage

    function Add_point(x, y, adress)
    {
        var myPlacemark = new ymaps.Placemark([x, y], 
        { 
            iconContent: '',
            balloonContent: '<p class="ballon-title">' + adress + '</p>'
        },
        {  
            iconLayout: 'default#imageWithContent',
            iconImageHref: 'img/black.png',
            iconImageSize: [46, 53],
            iconImageOffset: [-23, -26],
            iconContentOffset: [0, 0]
        });
        myMap.geoObjects.add(myPlacemark);
    }

    Add_point(x_point, y_point, adress_point);
}