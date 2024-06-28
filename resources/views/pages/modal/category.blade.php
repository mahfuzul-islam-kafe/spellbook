<div class="modal fade" id="categoryadding" tabindex="-1" aria-labelledby="categoryaddingLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="categoryaddingLabel">Add A New Category</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="categoryForm" action="{{ route('add.category') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <x-dashboard.form.text label='Category'
                                                name="category"></x-dashboard.form.text>
                                            <div class="mb-3">
                                                <label class="control-label">Categories</label>
                                                <select class="form-control select2" name="parent_id">
                                                    <option value="">Select</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->category }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <button form="categoryForm" type="submit" class="btn btn-primary mt-2">Save
                                            Category</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>