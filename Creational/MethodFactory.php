<?php

abstract class Dialog
{

    public abstract function createDialog();

    public function renderDialog(): string
    {
        $button = $this->createDialog();

        return "############### {$button->show()} ################";
    }
}

class WindowDialog extends Dialog
{
    public function createDialog()
    {
        return new WindowButton();
    }
}
class WebDialog extends Dialog
{
    public function createDialog()
    {
        return new WebButton();
    }
}
class UIDialog extends Dialog
{
    public function createDialog()
    {
        return new UIButton();
    }
}
abstract class Button
{
    public abstract function click();
    public abstract function show();
}
class WindowButton extends Button
{

    public function click()
    {
        return "Click Window";
    }
    public function show()
    {
        return "Show Window";
    }
}
class WebButton extends Button
{

    public function click()
    {
        return "Click Web";
    }
    public function show()
    {
        return "Show Web";
    }
}
class  UIButton extends Button
{

    public function click()
    {
        return "Click UI";
    }
    public function show()
    {
        return "Show UI";
    }
}


$dialog = new WindowDialog();

echo 'Window Dialog:' . $dialog->renderDialog();
echo "<br>";
echo "<hr>";
$dialog = new WebDialog();
echo 'Web Dialog:' . $dialog->renderDialog();

echo "<br>";
echo "<hr>";

$dialog = new UIDialog();
echo 'UI Dialog:' . $dialog->renderDialog();
