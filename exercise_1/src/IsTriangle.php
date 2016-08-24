<?php

class IsTriangle
{
    public function evaluate($SideA,$SideB,$SideC) {

        if($this->isInvalidTriangle($SideA, $SideB, $SideC))
        {
            throw new InvalidArgumentException('This triangle is invalid by the Triangle Inequality');
        }

        elseif($this->allSidesEqual($SideA, $SideB, $SideC))
        {
            return 'equilateral';
        }

        elseif($this->twoSidesEqual($SideA, $SideB, $SideC))
        {
            return 'isosceles';
        }

        else
        {
            return 'scalene';
        }
    }

    private function isInvalidTriangle($SideA,$SideB,$SideC) {
        if($SideA+$SideB<=$SideC || $SideB+$SideC<=$SideA || $SideA+$SideC<=$SideB)
        {
            return true;
        }
        return false;
    }

    private function allSidesEqual($SideA,$SideB,$SideC) {
        if($SideA==$SideB && $SideB==$SideC)
        {
            return true;
        }
        return false;
    }

    private function twoSidesEqual($SideA,$SideB,$SideC) {
        if($SideA==$SideB || $SideA==$SideC || $SideB==$SideC)
        {
            return true;
        }
        return false;
    }
}
