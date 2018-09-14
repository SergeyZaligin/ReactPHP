<?php

require __DIR__ . '/vendor/autoload.php';

$loop = React\EventLoop\Factory::create();

// $loop->addPeriodicTimer(2, function ()
// {
//   echo 'Tick \\n';
// });
// $loop->addTimer(10, function () {
//     echo "10sec!!!";
// });

$loop->run();
