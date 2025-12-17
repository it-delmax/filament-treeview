{{-- Filter Box --}}
<div class="flex items-center justify-end -mb-6">
    <form wire:submit.prevent="filterTree">                                                    
        <x-filament::input.wrapper prefix-icon="heroicon-m-magnifying-glass">                                                
            <x-filament::input
                type="text"                                
                required
                wire:model.lazy="filterValue"
                placeholder="{{ __('filament-treeview::tree.filter.placeholder') }}"                                
            />                            
        </x-filament::input.wrapper>                        
    </form>  
</div>
       
@if ($this->filterValue)
    <div class="flex items-start gap-x-4 shadow-sm bg-white dark:bg-gray-900 -mb-3 p-2 rounded-sm ring-1 ring-gray-950/5 dark:ring-white/10">
        <span class="text-sm dark:text-gray-200">Aktivan filter:</span>		            
        <x-filament::badge style="cursor: pointer" x-on:click="$wire.clearFilter()" color="warning" icon="heroicon-m-x-mark" icon-position="after">
            {{ $this->filterValue }}               
        </x-filament::badge> 
    </div>               
@endif