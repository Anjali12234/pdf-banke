<div>
    <header class="flex row items-center justify-between mb-4 border-b pb-4">
        <h2 class="text-xl text-slate-600 ml-3">Office Header</h2>
        <button type="button" class="btn btn-secondary text-white rounded"
            style="width: 60px; margin-left:40px; height:40px;" wire:click.prevent="addOfficeHeader">+</button>

    </header>
    @if (session()->has('success'))
        <div class="bg-success text-white">
            <p>{{ session('success') }}</p>
        </div>
    @endif
    <form wire:submit.prevent="save">
        @foreach ($officeHeaders as $index => $officeHeader)
            <div class="row" wire:key="office-header-{{ $index }}">
                <div class="col-md-3 mt-2">
                    <label for="title">नाम*</label>
                    <input type="text" class="form-control" name="officeHeaders[{{ $index }}][title]"
                        wire:model="officeHeaders.{{ $index }}.title">
                    @error("officeHeaders.$index.title")
                        <span class="font-medium text-sm text-danger"> {{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-3 mt-2">
                    <label for="english_title">English*</label>
                    <input type="text" class="form-control" name="officeHeaders[{{ $index }}][english_title]"
                        wire:model="officeHeaders.{{ $index }}.english_title">
                    @error("officeHeaders.$index.english_title")
                        <span class="font-medium text-sm text-danger"> {{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-3 mt-2">
                    <label for="font_size">Font Size</label>
                    <input type="number" class="form-control" name="officeHeaders[{{ $index }}][font_size]"
                        wire:model="officeHeaders.{{ $index }}.font_size">
                    @error("officeHeaders.$index.font_size")
                        <span class="font-medium text-sm text-danger"> {{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-3 mt-2">
                    <label for="font-color">Font Color</label>
                    <input type="color" class="form-control" name="officeHeaders[{{ $index }}][font_color]"
                        wire:model="officeHeaders.{{ $index }}.font_color">
                    @error("officeHeaders.$index.font_color")
                        <span class="font-medium text-sm text-danger"> {{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-3 mt-2">
                    <label for="font-family">Font Family</label>
                    <select class="form-control" name="officeHeaders[{{ $index }}][font_family]"
                        wire:model="officeHeaders.{{ $index }}.font_family">
                        <option>--Select font family--</option>
                        <option value="Arial">Arial</option>
                        <option value="Times New Roman">Times New Roman</option>
                    </select>
                    @error("officeHeaders.$index.font_family")
                        <span class="font-medium text-sm text-danger"> {{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-3 mt-2">
                    <label for="title">Position</label>
                    <input type="number" class="form-control" name="officeHeaders[{{ $index }}][position]"
                        wire:model="officeHeaders.{{ $index }}.position">
                    @error("officeHeaders.$index.position")
                        <span class="font-medium text-sm text-danger"> {{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-3 mt-2">
                    <button class="btn btn-danger mt-4 text-white rounded" style="width: 60px; height:40px;"
                        type="button" wire:click.prevent="removeOfficeHeader({{ $index }})">-</button>

                </div>
            </div>
        @endforeach
        <button class="btn btn-success mt-4" type="submit">save</button>

    </form>
</div>
