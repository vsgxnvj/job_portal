<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\CandidateBasicProfileUpdateRequest;
use App\Models\Candidate;
use App\Services\Notify;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Traits\FileUploadTrait; // Correct import

class CandidateProfileController extends Controller
{
    function index(): View
    {
        return view('frontend.candidate-dashboard.profile.index');
    }

    function basicInfoUpdate(
        CandidateBasicProfileUpdateRequest $request
    ): RedirectResponse {
        // handle files
        $imagePath = $this->uploadFile($request, 'profile_picture');
        $cvPath = $this->uploadFile($request, 'cv');

        $data = [];
        if (!empty($imagePath)) {
            $data['image'] = $imagePath;
        }
        if (!empty($cvPath)) {
            $data['cv'] = $cvPath;
        }
        $data['full_name'] = $request->full_name;
        $data['title'] = $request->title;
        $data['experience_id'] = $request->experience_level;
        $data['website'] = $request->website;
        $data['birth_date'] = $request->date_of_birth;

        // updating data
        Candidate::updateOrCreate(['user_id' => auth()->user()->id], $data);

        $this->updateProfileStatus();

        Notify::updatedNotification();

        return redirect()->back();
    }
}
