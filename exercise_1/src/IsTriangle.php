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
        return ($SideA+$SideB<=$SideC || $SideB+$SideC<=$SideA || $SideA+$SideC<=$SideB);
    }

    private function allSidesEqual($SideA,$SideB,$SideC) {
        return ($SideA==$SideB && $SideB==$SideC);
    }

    private function twoSidesEqual($SideA,$SideB,$SideC) {
        return ($SideA==$SideB || $SideA==$SideC || $SideB==$SideC);
    }
}
