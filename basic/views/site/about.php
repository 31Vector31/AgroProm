<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Про компанию';


/*print_r ($array);*/
?>

<style>
    .site-about{

    }
	
	.slider {
        position: relative;
        overflow: hidden;
		margin:20px;
    }

    .slider__wrapper {
        display: flex;
        transition: transform 0.6s ease;
    }

    .slider__item {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .slider__control {
        position: absolute;
        top: 50%;
        display: none;
        align-items: center;
        justify-content: center;
        width: 40px;
        color: #fff;
        text-align: center;
        opacity: 0.5;
        height: 50px;
        transform: translateY(-50%);
        background: rgba(0, 0, 0, .5);
    }

    .slider__control_show {
        display: flex;
    }

    .slider__control:hover,
    .slider__control:focus {
        color: #fff;
        text-decoration: none;
        outline: 0;
        opacity: .9;
    }

    .slider__control_left {
        left: 0;
    }

    .slider__control_right {
        right: 0;
    }

    .slider__control::before {
        content: '';
        display: inline-block;
        width: 20px;
        height: 20px;
        background: transparent no-repeat center center;
        background-size: 100% 100%;
    }

    .slider__control_left::before {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
    }

    .slider__control_right::before {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
    }

    .slider__item>div {
        line-height: 250px;
        font-size: 100px;
        text-align: center;
    }
    
	.image{
        height: 500px;
        width: 100%;
        background-size: cover;
        color:white;

        display: flex;
        align-items: flex-end;
        padding: 50px;
    }
	
	.push {
  list-style: none;
  
}
.push li {
  position: relative;
  padding: 20px 0 20px 40px;
  color: black;
  
}
.push li:before {
  position: absolute;
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background: #4F5151;
  content: "";
  left: 0;
  transition: .3s ease-in-out;
  top: 27px;
}
.push li:after {
  position: absolute;
  border-left: 1px dotted #4F5151;
  width: 1px;
  bottom: -12px;
  content: "";
  left: 3px;
  top: 48px;
}
.push li:hover:before{box-shadow: 0 0 0 10px rgba(0,0,0,.2)}
.push li:last-child:after {content: none;}

.text{
	font-weight: 300;
}
	p {
    text-indent: 20px; /* Отступ первой строки в пикселах */
   }

</style>
<div class="site-about" >
    <h1>Про компанию</h1>

	<div class="slider">
        <div class="slider__wrapper">
            <div class="slider__item">
                <div style="background-image: url('https://astartaholding.com/images/uploads/62c7fc8c7b35244d54fd5ea869b8c19e.jpg');" class="image">

                   
                </div>
            </div>
            <div class="slider__item">
                <div style="background-image: url('https://astartaholding.com/images/uploads/55a9df02b6b377268440ff985464773f.jpg');" class="image">

                   
                </div>
            </div>
			<div class="slider__item">
                <div style="background-image: url('https://astartaholding.com/images/uploads/9e44212bed65fc2cc5fd1f6ae4faa072.jpg');" class="image">

                   
                </div>
            </div>
			<div class="slider__item">
                <div style="background-image: url('https://astartaholding.com/images/uploads/a6ac98fdf5c0a53254dd082118bacf33.jpg');" class="image">

                   
                </div>
            </div>
            
            
        </div>
        <a class="slider__control slider__control_left" href="#" role="button"></a>
        <a class="slider__control slider__control_right slider__control_show" href="#" role="button"></a>
    </div>
	
	<div>
		AgroProm один из крупнейших вертикально интегрированных агро-индустриальных холдингов в Украине. Среди основных направлений деятельности:
		
		<ul class="push">
  <li>Сельское-хозяйство: более 230 тыс. га в управлении.</li>
  <li>Производство сахара: производитель сахара №1 в Украине. Общая суточная мощность по переработке сахарной свеклы составляет 40 тыс. тонн.</li>
  <li>Животноводство: производитель индустриального молока №1 в Украине. Общее поголовье составляет 24 тыс. голов.</li>
  <li>Переработка сои: №2 по переработке сои в Украине, общая годовая мощность по переработке составляет 220 тыс. тонн.</li>
  <li>Биоэнергетика: мощность биогазовго комплекса составляет 150 тыс. М³ биогаза в день.</li>
</ul>

<h4>Акции компании размещены на Варшавской фондовой бирже.</h4>

<span class="text"><p>С 1993 года наша компания постоянно подтверждает статус надежного партнера и поставщика, который внедряет лучшие международные практики в управлении и качества инвестирует в инновации и устойчивое развитие общин. Мы прозрачно, честно и ответственно ведем бизнес, осознавая свою роль в украинском обществе. За годы работы Астарта наладила прочные партнерские связи с предприятиями-лидерами перерабатывающей и кондитерской отраслей. Значительная часть нашей продукции также экспортируется через международных трейдеров и прямые контракты. Имея безупречную кредитную историю, мы успешно развиваем сотрудничество с ведущими украинскими и международными банками.</p>
</span>
	</div>

    <!--<code><?/*= __FILE__ */?></code>-->
</div>

<script>
    'use strict';
    var multiItemSlider = (function () {
        return function (selector, config) {
            var
                _mainElement = document.querySelector(selector), // основный элемент блока
                _sliderWrapper = _mainElement.querySelector('.slider__wrapper'), // обертка для .slider-item
                _sliderItems = _mainElement.querySelectorAll('.slider__item'), // элементы (.slider-item)
                _sliderControls = _mainElement.querySelectorAll('.slider__control'), // элементы управления
                _sliderControlLeft = _mainElement.querySelector('.slider__control_left'), // кнопка "LEFT"
                _sliderControlRight = _mainElement.querySelector('.slider__control_right'), // кнопка "RIGHT"
                _wrapperWidth = parseFloat(getComputedStyle(_sliderWrapper).width), // ширина обёртки
                _itemWidth = parseFloat(getComputedStyle(_sliderItems[0]).width), // ширина одного элемента
                _positionLeftItem = 0, // позиция левого активного элемента
                _transform = 0, // значение транфсофрмации .slider_wrapper
                _step = _itemWidth / _wrapperWidth * 100, // величина шага (для трансформации)
                _items = []; // массив элементов
            // наполнение массива _items
            _sliderItems.forEach(function (item, index) {
                _items.push({ item: item, position: index, transform: 0 });
            });

            var position = {
                getMin: 0,
                getMax: _items.length - 1,
            }

            var _transformItem = function (direction) {
                if (direction === 'right') {
                    if ((_positionLeftItem + _wrapperWidth / _itemWidth - 1) >= position.getMax) {
                        return;
                    }
                    if (!_sliderControlLeft.classList.contains('slider__control_show')) {
                        _sliderControlLeft.classList.add('slider__control_show');
                    }
                    if (_sliderControlRight.classList.contains('slider__control_show') && (_positionLeftItem + _wrapperWidth / _itemWidth) >= position.getMax) {
                        _sliderControlRight.classList.remove('slider__control_show');
                    }
                    _positionLeftItem++;
                    _transform -= _step;
                }
                if (direction === 'left') {
                    if (_positionLeftItem <= position.getMin) {
                        return;
                    }
                    if (!_sliderControlRight.classList.contains('slider__control_show')) {
                        _sliderControlRight.classList.add('slider__control_show');
                    }
                    if (_sliderControlLeft.classList.contains('slider__control_show') && _positionLeftItem - 1 <= position.getMin) {
                        _sliderControlLeft.classList.remove('slider__control_show');
                    }
                    _positionLeftItem--;
                    _transform += _step;
                }
                _sliderWrapper.style.transform = 'translateX(' + _transform + '%)';
            }

            // обработчик события click для кнопок "назад" и "вперед"
            var _controlClick = function (e) {
                if (e.target.classList.contains('slider__control')) {
                    e.preventDefault();
                    var direction = e.target.classList.contains('slider__control_right') ? 'right' : 'left';
                    _transformItem(direction);
                }
            };

            var _setUpListeners = function () {
                // добавление к кнопкам "назад" и "вперед" обрботчика _controlClick для событя click
                _sliderControls.forEach(function (item) {
                    item.addEventListener('click', _controlClick);
                });
            }

            // инициализация
            _setUpListeners();

            return {
                right: function () { // метод right
                    _transformItem('right');
                },
                left: function () { // метод left
                    _transformItem('left');
                }
            }

        }
    }());

    var slider = multiItemSlider('.slider')

</script>
