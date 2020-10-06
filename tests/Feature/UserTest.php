<?php

namespace Tests\Feature;

use Tests\TestCase;

class UserTest extends TestCase
{
    private function getTestData()
    {
        $name = "testname";
        $email = "test@example.com";
        $password = bcrypt("P@ssw0rd");
        return ["name" => $name, "email" => $email, "password" => $password];
    }

    public function testUserStore()
    {
        $data = $this->getTestData();
        $response = $this->post("/users", $data);
        $response->assertStatus(302);
    }

    public function testUserIndex()
    {
        $response = $this->get("/users");
        $response->assertStatus(200);
    }

    public function testUserShow()
    {
        $response = $this->get("/users/" . 1);
        $response->assertStatus(200);
    }

    public function testuserEdit()
    {
        $response = $this->get("users/1/edit");
        $response->assertStatus(200);
    }

    public function testUserDelete()
    {
        $response = $this->delete("/users/" . 1);
        $response->assertStatus(302);
    }

    public function testUserCreate()
    {
        $response = $this->get("/users/create");
        $response->assertStatus(200);
    }
}
