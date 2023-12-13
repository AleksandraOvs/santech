<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Hero')
->show_on_post_type('product')
->add_fields( array (
    Field::make('complex', 'table-row', 'Таблица')
    ->add_fields( array(
        Field::make('text', 'row-name', 'Модель'),
        Field::make('text', 'row-lenght', 'Раб.длина'),
        Field::make('text', 'row-thichness', 'Раб.толщина'),
        Field::make('text', 'row-bending', 'Предподгиб'),
        Field::make('text', 'row-rolls', 'Верх.Нижн. валы'),
        Field::make('text', 'row-siderolls', 'Боковые валы'),
        Field::make('text', 'row-motorpower', 'Можность двигателя'),
        Field::make('text', 'row-length', 'Длина'),
        Field::make('text', 'row-height', 'Высота'),
        Field::make('text', 'row-width', 'Ширина'),
        Field::make('text', 'row-weight', 'Вес'),
        Field::make('text', 'row-minbend', 'Мин.диаметр гиба'),
    )),
));