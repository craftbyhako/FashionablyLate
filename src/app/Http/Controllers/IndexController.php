<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;



class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->all();
    //     only([
    //     'first_name',
    //     'last_name',
    //     'gender',
    //     'email',
    //     'tel',
    //     'address',
    //     'building',
    //     'detail',
    // ]);
        //return $contact;
        return view('confirm', compact('contact'));
    }



    public function store(ContactRequest $request)
    {
        $tel = $request->input('area-code') . '-' . $request->input('first_part') . '-' . $request->input('second_part');

        $categoryInput = $request->input('category') ?? 'other';

        // dd($categoryInput);
        $categoryId = $this->convertCategory($categoryInput);

        $contact = [
        'first_name'  => $request->input('first_name'),
        'last_name'   => $request->input('last_name'),
        'gender'      => $this->convertGender($request->input('gender')),
        'email'       => $request->input('email'),
        'tel'         => $tel,
        'address'     => $request->input('address'),
        'building'    => $request->input('building') ?? '',  // ないなら空文字を入れる
        'detail'      => $request->input('detail'),
        
        'category_id'  => $this->convertCategory($categoryInput),
    ];
        
        Contact::create($contact);
        // return view('confirm', compact('contact'));
        return redirect('/thanks');
    }


//     public function show()
// {
//     $contact = Contact::all();
//     return view('confirm', compact('contact')); 
// }

public function thanks()
{
    return view('thanks');
}


private function convertGender($gender)
{
    switch ($gender) {
        case 'male':
            return 1; // 男性
        case 'female':
            return 2; // 女性
        default:
            return 3; // その他
    }
}

private function convertCategory($category)
{
    switch ($category) {
        case 'product':
            return 1; // 商品のお届けについて
        case 'service':
            return 2; // 商品の交換について
        case 'support':
            return 3; // 商品トラブル
        case 'shop':
            return 4; // ショップへのお問い合わせ
        case 'other':
            return 5; // その他サービスについて
        default:
            return 5; // デフォルトは「その他」
    }
}

}
