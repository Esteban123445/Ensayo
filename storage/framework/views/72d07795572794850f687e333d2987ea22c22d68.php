<?php echo csrf_field(); ?>
<?php echo $__env->make('dashboard.partials.validation-errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('dashboard.partials.status', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="form-group">
    <input type="text" name="RUT" id="RUT" placeholder="RUT doctor"
    value="<?php echo e(old('RUT',$doctor->RUT)); ?>">

</div>
<div class="form-group">
    <input type="text" name="nombres" id="nombres" placeholder="Nombres"
    value="<?php echo e(old('nombres',$doctor->nombres)); ?>">

</div>
<div class="form-group">
    <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos"
    value="<?php echo e(old('apellidos',$doctor->apellidos)); ?>">

</div>
<div class="form-group">
    <input type="text" name="email" id="email" placeholder="Email"
    value="<?php echo e(old('email',$doctor->email)); ?>">

</div>
<div class="form-group">
    <input type="text" name="direccion" id="direccion" placeholder="Direccion"
    value="<?php echo e(old('direccion',$doctor->direccion)); ?>">

</div>
<div>
    <select name="especialidad" id="especialidad">
        <option value="0">General</option>
        <option value="1">Neurologo</option>
        <option value="2">Fisiatra</option>
    </select>
</div>
<div>
    <button type="submit" class="btn btn-success">Aceptar</button>
</div><?php /**PATH D:\laragon\www\parcial_sw1\resources\views/dashboard/doctors/_form.blade.php ENDPATH**/ ?>