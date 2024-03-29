<?php
class View_Product
{
    public function __construct()
    {

    }

    public function createForm()
    {
        $form = '<form action="" method="POST">';
        $form .= '<div>';
        $form .= $this->createTextField('pdata[product_name]', "Product Name: ");
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createTextField('pdata[sku]', "Sku: ");
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createRadioButtons('pdata[product_type]', "Product Type: ", ['Simple', 'Bundle']);
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createDropdown('pdata[category]', "Category: ", ['Bar & Game Room', 'Bedroom', 'Decor', 'Dining & Kitchen', 'Lighting', 'Living Room', 'Mattresses', 'Office', 'Outdoor']);
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createTextField('pdata[manufacturer_cost]', "Manufacturer Cost: ");
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createTextField('pdata[shipping_cost]', "Shipping Cost: ");
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createTextField('pdata[total_cost]', "Total Cost: ");
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createTextField('pdata[price]', "Price: ");
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createDropdown('pdata[status]', "Status: ", ['Enabled', 'Disabled']);
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createDateInput('pdata[created_at]', "Created At: ");
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createDateInput('pdata[updated_at]', "Updated At: ");
        $form .= '</div>';
        $form .= '<div>';
        $form .= $this->createSubmitBtn('Submit');
        $form .= '</div>';
        $form .= '</form>';
        return $form;
    }

    public function createTextField($name, $title, $value = '', $id = '')
    {
        return '<span> ' . $title . ' </span><input id=" ' . $id . '" type= "text"  name=" ' . $name . '"  value=" ' . $value . ' ">';
    }
    // public function createRadioButton($name, $title, $value = '', $id = ''){

    // }
    // public function createRadioButtons($name, $title, $options, $selected = '') {
    //     $html = '<span>' . $title . '</span>';
    //     foreach ($options as $option) {
    //         $html .= '<input type="radio" name="' . $name . '" value="' . $option . '" ';
    //         $html .= ($selected == $option) ? 'checked' : '';
    //          $html .= '> ' . $option . ' ';
    //     }
    //     return $html;
    // }
    public function createRadioButtons($name, $title, $options, $selected = '')
    {
        $html = sprintf('<span>%s</span>', $title);

        foreach ($options as $option) {
            $html .= sprintf(
                '<input type="radio" name="%s" value="%s" %s> %s ',
                $name,
                $option,
                ($selected == $option) ? 'checked' : '',
                $option
            );
        }

        return $html;
    }
    public function createDropdown($name, $title, $options, $selected = '')
    {
        $html = sprintf('<span>%s</span>', $title);
        $html .= '<select name="' . $name . '">';
        foreach ($options as $option) {
            $html .= sprintf(
                '<option value="%s" %s>%s</option>',
                $option,
                ($selected == $option) ? 'selected' : '',
                $option
            );
        }
        $html .= '</select>';
        return $html;
    }
    public function createDateInput($name, $title, $value = '') {
        return '<span>' . $title . '</span><input type="date" name="' . $name . '" value="' . $value . '">';

    }
    public function createSubmitBtn($value)
    {
        return '<input type="submit" value="' . $value . '">';
    }

    public function toHtml()
    {
        return $this->createForm();
    }
}
?>
<!-- C:\xampp\htdocs\intern_php\practice\mvc_form\View\Product.php -->