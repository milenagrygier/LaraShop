<?php

declare(strict_types=1);

namespace Modules\Contact\Repositories;

use Modules\Contact\Entities\ContactForm;
use DB;
use Modules\Contact\Repositories\Interfaces\ContactFormRepositoryInterface;
use Illuminate\Database\Query\Builder;

class ContactFormRepository implements ContactFormRepositoryInterface
{
    public function find(int $id): ?ContactForm
    {
        return ContactForm::where('id', $id)->first();
    }

    public function getDataTableBuilder(): Builder
    {
        return DB::table('contact_forms')
        ->join('contact_types', 'contact_types.id', '=', 'contact_forms.type_id')
        ->select('contact_types.name', 'contact_forms.subject', 'contact_forms.email',
        'contact_forms.phone', 'contact_forms.created_at', 'contact_forms.updated_at');
    }

    public function create(array $data): ContactForm
    {
        return ContactForm::create($data);
    }

    public function delete(int $id): bool
    {
        return ContactForm::where('id', $id)->delete();
    }
}
