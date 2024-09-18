<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GeneratePagesFile extends Command
{
    
    protected $signature = 'make:page {path}';
    protected $description = 'Generate a new Blade file in view/pages';

  
    public function __construct()
    {
        parent::__construct();
    }

    
    public function handle()
    {
    
        $path = $this->argument('path');
        
       
        $fullPath = resource_path('views/pages/' . $path . '.blade.php');

     
        $directory = dirname($fullPath);
        $fileName = basename($fullPath);

       
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        if (File::exists($fullPath)) {
            $this->error('File sudah ada sebelumnya!');
            return 1; 
        }

        $content = <<<EOT
<?php

use function Livewire\Volt\{state};

// logic code

?>

<x-app-layout>
    @volt
        <x-layout-spacing>
            {{-- view code --}}
        </x-layout-spacing>
    @endvolt
</x-app-layout>
EOT;

       
        File::put($fullPath, $content);

        $this->info('File Berhail ku Buatin : ');
        $this->info($fullPath);
        $this->info('Makasih dulu!         -ynvrse');
        return 0; 
    }
}
