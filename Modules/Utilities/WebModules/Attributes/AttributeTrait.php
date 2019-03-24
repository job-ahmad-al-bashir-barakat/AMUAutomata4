<?php

namespace Modules\Utilities\WebModules\Attributes;

/**
 * This Trait was built to make the functions changeable outside the package
 *
 * Class AttributeTrait
 * @package Modules\Utilities\WebModules
 */
trait AttributeTrait
{
    /**
     * This Function will determined the Attribute Class by Attribute id
     *
     * @param $attributeId
     * @return Attribute
     * @throws \Exception
     */
    public static function setAttribute($attributeId)
    {
        switch ($attributeId) {
            case 1:
                return new StatusAttribute();
            case 2:
                return new WidthAttribute();
            case 3:
                return new LimitAttribute();
            case 4:
                return new TextEditorAttribute();
            case 5:
                return new SlidersAttribute();
            case 6:
                return new BlocksAttribute();
            case 7:
                return new CoursesAttribute();
            case '8':
                return new ShowAttribute();
            case '9':
                return new PersonsAttribute();
            case '10':
                return new TitleAttribute();
            case '11':
                return new IconAttribute();
            case '12':
                return new VerticalSlidersAttribute();
            case '13':
                return new ImagesAttribute();
            case '14':
                return new LinkTextAttribute();
            case '15':
                return new UrlAttribute();
            case '16':
                return new PageAttribute();
            case '17':
                return new StepsAttribute();
            case '18':
                return new TextCardsOneAttribute();
            case '19':
                return new UrlTextAttribute();
            case '20':
                return new RotateAttribute();
            case '21':
                return new GalleriesAttribute();
            case '22':
                return new GeolocationAttribute();
            case '23':
                return new ImageAttribute();
            case '24':
                return new CourseAttribute();
            case '25':
                return new FacultyAttribute();
            case '26':
                return new EventsGroupsAttribute();
            case '27':
                return new HeightAttribute();
            case '28':
                return new ImageLimitAttribute();
            case '29':
                return new CardsAttribute();
            case '30':
                return new LinksAttribute();
            case '31':
                return new VideoAttribute();
            default:
                throw new \Exception('Undefined Attributes');
        }
    }

    /**
     * This Function will determined the Attribute Class by Attribute Code
     *
     * @param $attributeCode
     * @return Attribute
     * @throws \Exception
     */
    public static function setByAttributeCode($attributeCode)
    {
        switch ($attributeCode) {
            case 'status':
                return new StatusAttribute();
            case 'width':
                return new WidthAttribute();
            case 'limit':
                return new LimitAttribute();
            case 'text_editor':
                return new TextEditorAttribute();
            case 'sliders':
                return new SlidersAttribute();
            case 'blocks':
                return new BlocksAttribute();
            case 'courses':
                return new CoursesAttribute();
            case 'show':
                return new ShowAttribute();
            case 'persons':
                return new PersonsAttribute();
            case 'title':
                return new TitleAttribute();
            case 'icon':
                return new IconAttribute();
            case 'vertical_sliders':
                return new VerticalSlidersAttribute();
            case 'images':
                return new ImagesAttribute();
            case 'link_text':
                return new LinkTextAttribute();
            case 'url':
                return new UrlAttribute();
            case 'page':
                return new PageAttribute();
            case 'steps':
                return new StepsAttribute();
            case 'text_cards_1':
                return new TextCardsOneAttribute();
            case 'url_text':
                return new UrlTextAttribute();
            case 'rotate':
                return new RotateAttribute();
            case 'galleries':
                return new GalleriesAttribute();
            case 'geolocation':
                return new GeolocationAttribute();
            case 'image':
                return new ImageAttribute();
            case 'course':
                return new CourseAttribute();
            case 'faculty':
                return new FacultyAttribute();
            case 'events_groups':
                return new EventsGroupsAttribute();
            case 'height':
                return new HeightAttribute();
            case 'image_limit':
                return new ImageLimitAttribute();
            case 'cards':
                return new CardsAttribute();
            case 'links':
                return new LinksAttribute();
            case 'video':
                return new VideoAttribute();
            default:
                throw new \Exception('Undefined Attributes');
        }
    }
}