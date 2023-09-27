@props(["name", 'id', 'placeholder'])

<textarea name="{{$name}}" id="{{$id}}" autocomplete="false" placeholder="{{$placeholder}}" class="bg-transparent p-4 xl:p-5 border border-custom-light-green rounded-2xl text-xs sm:text-sm md:text-base h-48 resize-none placeholder:font-bold placeholder:text-custom-light-green focus:border-2 font-medium"></textarea>
