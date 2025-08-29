@extends('layouts.backend.app')

@section('title', 'Author Profile')

@section('content')
<div class="max-w-xl mx-auto mt-10 bg-white rounded-xl shadow p-6">
    <h2 class="text-xl font-bold text-gray-800 mb-4">Profile Picture</h2>
    
    <!-- Profile Image -->
    <div class="flex flex-col items-center">
        <div class="relative">
            <img id="profileImage" src="https://via.placeholder.com/150" 
                 alt="Profile Picture" 
                 class="w-32 h-32 rounded-full object-cover border-4 border-green-500 shadow">
            
            <!-- Upload Button -->
            <label for="uploadPhoto" 
                   class="absolute bottom-2 right-2 bg-green-600 text-white text-xs px-2 py-1 rounded cursor-pointer hover:bg-green-700">
                Change
            </label>
            <input type="file" id="uploadPhoto" class="hidden" accept="image/*">
        </div>
        
        <p class="mt-3 text-gray-600 text-sm">Upload your profile picture (JPG, PNG).</p>
    </div>
</div>


@endsection
<!-- jQuery Script -->
@push('scripts')
<script>
    $(document).ready(function(){
        $("#uploadPhoto").on("change", function(event){
            const reader = new FileReader();
            reader.onload = function(e){
                $("#profileImage").attr("src", e.target.result);
            };
            reader.readAsDataURL(event.target.files[0]);
        });
    });
</script>
@endpush