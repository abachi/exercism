<?php

class Robot
{
    const DIRECTION_NORTH = 'N';
    const DIRECTION_EAST = 'E';
    const DIRECTION_SOUTH = 'S';
    const DIRECTION_WEST = 'W';

    public $position;
    public $direction;

    public function __construct($position, $direction)
    {
        $this->position = $position;
        $this->direction = $direction;
    }


    public function turnRight() : Robot
    {
        if ($this->direction === Robot::DIRECTION_NORTH) {
            $this->direction = Robot::DIRECTION_EAST;
            return $this;
        }

        if ($this->direction === Robot::DIRECTION_EAST) {
            $this->direction = Robot::DIRECTION_SOUTH;
            return $this;
        }

        if ($this->direction === Robot::DIRECTION_SOUTH) {
            $this->direction = Robot::DIRECTION_WEST;
            return $this;
        }

        if ($this->direction === Robot::DIRECTION_WEST) {
            $this->direction = Robot::DIRECTION_NORTH;
            return $this;
        }
    }

    public function turnLeft() : Robot
    {
        if ($this->direction === Robot::DIRECTION_NORTH) {
            $this->direction = Robot::DIRECTION_WEST;
            return $this;
        }

        if ($this->direction === Robot::DIRECTION_WEST) {
            $this->direction = Robot::DIRECTION_SOUTH;
            return $this;
        }

        if ($this->direction === Robot::DIRECTION_SOUTH) {
            $this->direction = Robot::DIRECTION_EAST;
            return $this;
        }

        if ($this->direction === Robot::DIRECTION_EAST) {
            $this->direction = Robot::DIRECTION_NORTH;
            return $this;
        }
    }

    public function advance() : Robot
    {
        if ($this->direction === Robot::DIRECTION_NORTH) {
            $this->position[1] += 1;
        }
        if ($this->direction === Robot::DIRECTION_SOUTH) {
            $this->position[1] -= 1;
        }
        if ($this->direction === Robot::DIRECTION_EAST) {
            $this->position[0] += 1;
        }
        if ($this->direction === Robot::DIRECTION_WEST) {
            $this->position[0] -= 1;
        }
        return $this;
    }

    public function instructions($serie) : Robot
    {
        $instructions = str_split($serie);
        foreach ($instructions as $i) {
            switch ($i) {
            case 'L':
              $this->turnLeft();
              break;
            case 'R':
              $this->turnRight();
              break;
            case 'A':
              $this->advance();
              break;

            default:
              throw new InvalidArgumentException;
              break;
            }
        }
        return $this;
    }
}
