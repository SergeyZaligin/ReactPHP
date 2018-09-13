<?php
$deferred = function () {
  echo 'Hello!';
};

function runAt(callable $func, $time) {
  if ($time <= time()) {
    $func();
    return true;
  }
  return false;
}

$time = time()+10;

while (true) {
  $result = runAt($deferred, $time);
  if ($result) {
    break;
  }
}
