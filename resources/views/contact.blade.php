<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Validation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
            @endif

  <form action="contact" method="POST" class="pt-lg-5 border p-4 ">
  @csrf
  <p class="bg-secondary text-white p-3">Registration Form</p>
  <div class="form-group" >
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name"  value="{{old('name')}}" name="name">
      @error('name')
      <div class="text-danger">{{ $message }} </div>
      @enderror
    </div>
    <div class="form-group">
      <label for="email">Email Address</label>
      <input type="email" class="form-control" id="email"  value="{{old('email')}}" name="email">
      @error('email')
      <div class="text-danger">{{ $message }} </div>
      @enderror
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" value="{{old('password')}}" class="form-control" id="password" name="password">
      @error('password')
      <div class="text-danger">{{ $message }} </div>
      @enderror
    </div>
    <div class="form-group">
      <label for="confirm-password">Confirm Password</label>
      <input type="password" class="form-control" value="{{old('password_confirmation')}}" id="password_confirmation" name="password_confirmation">
      @error('confirm_password')
      <div class="text-danger">{{ $message }} </div>
      @enderror
    </div>
    <div class="form-group">
      <label for="age">Age</label>
      <input type="text" class="form-control" id="age" value="{{old('age')}}" name="age">
      @error('age')
      <div class="text-danger">{{ $message }} </div>
      @enderror
    </div>

    <div class="form-group">
        <label for="profile_picture">Profile Picture</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="profile_picture" name="profile_picture" accept="image/*">
            <label class="custom-file-label" for="profile_picture">Choose file</label>
        </div>
        @error('profile_picture')
        <div class="text-danger">{{ $message }} </div>
        @enderror
    </div>

    <div class="form-group">
      <label for="bio">Bio</label>
      <textarea class="form-control" name="bio" placeholder="Enter Your Message">{{ old('bio') }}</textarea>
      @error('bio')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <label>Interests</label>
      <div class="row">
          <div class="col">
              <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" value="sports" id="interest_sports" name="interests[]">
                  <label class="form-check-label ml-2" for="interest_sports">Sports</label>
              </div>
              @error('interests')
              <div class="text-danger">{{ $message }}</div>
              @enderror
          </div>
          <div class="col">
              <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" value="music" id="interest_music" name="interests[]">
                  <label class="form-check-label ml-2" for="interest_music">Music</label>
              </div>
          </div>
          <div class="col">
              <div class="form-check mb-2">
                  <input class="form-check-input"
                  type="checkbox" value="movies" id="interest_movies" name="interests[]">
                  <label class="form-check-label ml-2" for="interest_movies">Movies</label>
              </div>
          </div>
      </div>
      @error('interests')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
        <label>Gender</label>
        <div class="d-flex">
            <div class="form-check mr-3">
                <input class="form-check-input" type="radio" value="male" id="gender_male" name="gender">
                <label class="form-check-label ml-2" for="gender_male">Male</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="female" id="gender_female" name="gender">
                <label class="form-check-label ml-2" for="gender_female">Female</label>
            </div>
        </div>
        @error('gender')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="country">Country</label>
        <select class="form-control" id="country" name="country" value="{{old('country')}}">
            <option value="">Select a country</option>
            <option value="Afghanistan">Afghanistan</option>
            <option value="Albania">Albania</option>
            <option value="Algeria">Algeria</option>
            <option value="Pakistan">Pakistan</option>
            <!-- Add more countries as needed -->
        </select>
        @error('country')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="tel" class="form-control" id="phone" name="phone" value="{{old('phone')}}">
        @error('phone')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" value="{{old('address')}}">
        @error('address')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="postal_code">Postal Code</label>
        <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{old('postal_code')}}">
        @error('postal_code')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="website">Website URL</label>
        <input type="url" class="form-control" id="website" name="website" value="{{old('website')}}">
        @error('website')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="agree"> I agree to the terms and conditions
      </label>
      @error('agree')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <button type="submit" class="btn btn-dark">Submit</button>
  </form>
        </div>
    </div>
</div>

</body>
</html>

