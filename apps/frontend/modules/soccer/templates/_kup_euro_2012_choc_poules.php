<div class="regle">
    <div style="margin-left: 10px; margin-top: 20px; width: 670px;">

    <?php $rules1 = array('type' => '','title' => 'Sur ce match','nbSubSection' => '6',
    Array('orange' => '','legende' => 'Score exact', 'image' => '/images/kup/view/regle/tabFlecheVerte.png','score' => '10'),
    Array('orange' => '','legende' => 'Vainqueur du match', 'image' => '/images/kup/view/regle/tabFlecheVerte.png','score' => '3'),
    Array('orange' => '','legende' => 'Qui gagnera la première mi-temps ?','image' => '/images/kup/view/regle/tabFlecheVerte.png','score' => '5'),
    Array('orange' => '','legende' => 'Qui remportera la seconde mi-temps ?','image' => '/images/kup/view/regle/tabFlecheVerte.png','score' => '5'),
    Array('orange' => '','legende' => 'Quel sera le premier buteur du match ?','image' => '/images/kup/view/regle/tabFlecheVerte.png','score' => '15'),
    Array('orange' => '','legende' => 'Nombre de buts d\'écarts à la fin de la rencontre ?','image' => '/images/kup/view/regle/tabFlecheVerte.png','score' => '5'),
    ) ?>

    <?php include_component('kup', 'rulesTable', array('rules' => $rules1)) ?>
    </div>
</div>
