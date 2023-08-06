<div class="card-body">
    <form wire:submit.prevent="submit" class="flex flex-col justify-between h-full">
        <div>
            <h2 class="card-title">Login sekarang</h2>
            <span class="text-sm">Selamat datang di aplikasi {{ config('app.name') }}</span>
        </div>
        <div class="py-4 flex flex-col gap-4">
            <input type="text" wire:model="username" class="input" placeholder="Username or email" />
            <input type="password" wire:model="password" class="input" placeholder="Password" />
            <div class="form-control">
                <label class="label cursor-pointer">
                    <span class="label-text">Remember me</span>
                    <input type="checkbox" checked="checked" class="checkbox" />
                </label>
            </div>
        </div>
        <div class="card-actions justify-end">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>
