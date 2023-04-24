<?php

    namespace PHPApplication\Models;

    /**
     * Class Student
     * @package PHPApplication\Models
     *
     * Represents a student in the system.
     */
    class Student
    {
        /**
         * @var string $name The name of the student.
         */
        private string $name;

        /**
         * Student constructor
         * @param string $name The name of the student.
         */
        public function __construct(string $name)
        {
            $this->name = $name;
        }

        /**
         * Get the name of the student.
         *
         * @return string The name of the student.
         */
        public function getName(): string
        {
            return $this->name;
        }
    }
