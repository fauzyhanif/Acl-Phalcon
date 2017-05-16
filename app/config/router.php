<?php


if (!empty($_SESSION['acl']['group'])) {
    
    $acl = QodrPmbAcl::find(["conditions" => "actived = 'Y' AND usergroup like '%,".$_SESSION['acl']['group'].",%'"]);

    $router->add(
        '/Logout',
        [
            "controller" => 'login',
            "action"     => 'logout',
        ]
    );

    $router->notFound(
        [
            "controller" => "index",
            "action"     => "error403",
        ]
    );

} else {
    $acl = QodrPmbAcl::find(["conditions" => "actived = 'Y' AND usergroup like '%,999,%'"]);

    $router->add(
        '/Login',
        [
            "controller" => 'login',
            "action"     => 'login',
        ]
    );

    $router->add(
        '/Login/error/:params',
        [
            "controller" => 'login',
            "action"     => 'login',
            "params"     => 1
        ]
    );

    $router->add(
        '/Login/proses',
        [
            "controller" => 'login',
            "action"     => 'proses',
        ]
    );

    $router->setDefaults(
        [
            "controller" => "index",
            "action"     => "index",
        ]
    );

}

foreach ($acl as $key => $value) {
    if (!empty($value->url)) {
        $router->add(
            $value->url,
            [
                "controller" => $value->controller,
                "action"     => $value->action,
                "params"     => 1
            ]
        );
    }
}
$router->handle();
