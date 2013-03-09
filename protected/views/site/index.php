<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php
    if(Yii::app()->user->isGuest){
        echo '<h1>Üdv <i>';
        echo CHtml::encode(Yii::app()->name);
        echo '</i>-on!</h1>
             <p>Regisztárcióhoz kattintson a regisztráció menüpontra!</p>';
    } else {
        echo '<h1>Üdv <i>';
        echo CHtml::encode(Yii::app()->user->name);
        echo '</i>!</h1>';
    }
?>
<p>Felhasználók menedzselését csak admin felhasználóval lehet, melynek léteznie kell az adatbázisban!</p>
