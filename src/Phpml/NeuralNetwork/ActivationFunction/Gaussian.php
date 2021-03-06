<?php

declare(strict_types=1);

namespace Phpml\NeuralNetwork\ActivationFunction;

use Phpml\NeuralNetwork\ActivationFunction;

class Gaussian implements ActivationFunction
{
    /**
     * @param float|int $value
     */
    public function compute($value): float
    {
        return exp(-pow($value, 2));
    }
}
