<?php

namespace LightFly\Finance;

interface HttpClientInterface {

    public function get($url, $options = []);

    public function post($url, $options = []);
}