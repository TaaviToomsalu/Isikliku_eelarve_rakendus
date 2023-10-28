<?php

namespace App\Entities;

/**
 * @Entity
 * @Table(name="accounts")
 */
class Account
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;

    /**
     * @Column(type="string")
     */
    private $name;

    /**
     * @Column(type="string")
     */
    private $description;

    /**
     * @Column(type="decimal", precision=10, scale=2)
     */
    private $initialBalance;

    /**
     * @Column(type="string")
     */
    private $accountType;

    // Getters and setters for the properties
}
