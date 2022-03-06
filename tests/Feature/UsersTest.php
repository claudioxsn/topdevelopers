<?php

it('has login page', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

