# Задача-01
- Сдать тесты в курсе контент-менеджера - [Сертификат]
- Установить битрикс и начать разбираться в админке - [woorduluck.ru]
- Сделать шаблон компонента news.list - [news.list]

### Выполнение
**Шаг-01** - Копируем из исходного шаблона папку fonts в папку шаблона компонента */bitrix/bitrix/templates/books/components/bitrix/news.list/articles*
```sh
cp fonts /var/www/html/bitrix/bitrix/templates/books/components/bitrix/news.list/articles
```

**Шаг-02** - Удаляем файл стилей style.css в папке */bitrix/bitrix/templates/books/components/bitrix/news.list/articles* и вставляем common.css переименовав
```sh
rm /var/www/html/bitrix/bitrix/templates/books/components/bitrix/news.list/articles/style.css
mv css/common.css /var/www/html/bitrix/bitrix/templates/books/components/bitrix/news.list/articles/style.css
```

**Шаг-03** - Переписываем */bitrix/bitrix/templates/books/components/bitrix/news.list/articles/template.php* в соответствии с заданой разметкой из index.html
```php
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div id="barba-wrapper">

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>

<div class="article-list">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<a class="article-item article-list__item" href="<?=$arItem["DETAIL_PAGE_URL"]?>" data-anim="anim-3">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div class="article-item__background">
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["NAME"]?>">
			</div>
		<?endif?>

		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<div class="article-item__wrapper">
				<div class="article-item__title"><?echo $arItem["NAME"]?></div>
		<?endif;?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
				<div class="article-item__content"><?echo $arItem["PREVIEW_TEXT"];?></div>
		<?endif;?>
			</div>		
	</a>
<?endforeach;?>

</div>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>

</div>
```

**Шаг-04** - В админке *Контент - Инфоблоки - Типы инфоблоков - Новости* создаем новый инфоблок. 

**Шаг-05** - В админке *Контент - Новости* создаем 6 элементов новостей в соответствии index.html

**Шаг-06** - Включаем в компоненте *Новости* работу с ЧПУ, а также прописываем в странице детального просмотра значение #ELEMENT_CODE#

**Шаг-07** - В открытой части создаем пустую страницу с компонентом *Контент - Статьи и новости - Список новостей*

**Шаг-08** - В параметрах компонента *Список новостей* указываем в поле шаблон компонента - articles

**Шаг-09** - В параметрах компонента *Список новостей* указываем в поле кода информационного блока созданный ранее инфоблок

**Шаг-10** - В параметрах компонента *Список новостей* указываем в поле URL странице детального просмотра значение #ELEMENT_CODE#




[Сертификат]: <https://github.com/WoorDuLuck/task-for-trainees/blob/task-01/%D0%9A%D0%BE%D0%BD%D1%82%D0%B5%D0%BD%D1%82-%D0%BC%D0%B5%D0%BD%D0%B5%D0%B4%D0%B6%D0%B5%D1%80.pdf>
[woorduluck.ru]: <https://woorduluck.ru>
[news.list]: <https://woorduluck.ru/content/news/spisok-novostey.php>
