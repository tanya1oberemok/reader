<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Request extends FormRequest {
    /**
     * Default authorization rules
     *
     * @return array
     */
    public function rules() {
        return [];
    }

    public function hasSearch(): bool {
        return $this->filled('search');
    }

    public function search() {
        return $this->search;
    }
}
