<?php
return [
    'name' => 'customlayout/app',
    
    'label' => 'Custom Layout',
    
    'events' => [
        'view.scripts' => function ($event, $scripts) use ($app) {
            $scripts->register('customlayout-widget', 'customlayout:app/bundle/widgets/customlayout.js', ['~widgets']);
        }
    ],

    'render' => function ($widget) use ($app) {
        return $app->view('customlayout/widgets/customlayout.php' , compact('widget'));
    }    
];
?>