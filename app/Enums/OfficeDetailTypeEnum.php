<?php

namespace App\Enums;

enum OfficeDetailTypeEnum: string
{
    case INTRODUCTION = 'introduction';
    case PURPOSE = 'purpose';
    case WORK_DESCRIPTION = 'work_description';
    case ORGANIZATIONAL_STRUCTURE = 'organizational_structure';
    case CITIZEN_CHARTER = 'citizen_charter';

    public function label()
    {
        return $this->getlabel($this);
    }

    public function getlabel(self $value)
    {
        return match ($value) {
            self::INTRODUCTION => 'परिचय',
            self::PURPOSE => 'उद्देश्य',
            self::WORK_DESCRIPTION => 'कार्य विवरण',
            self::ORGANIZATIONAL_STRUCTURE => 'संगठन संचरना',
            self::CITIZEN_CHARTER => 'नागरिक वडापत्र'
        };
    }
}
