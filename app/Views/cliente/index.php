
<div class="dashboard-container">
    <div class="dashboard-header">
        <h2><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Portal de Cliente'; ?></h2>
        <p>Bienvenido, <?php echo isset($_SESSION['user_nombre']) ? htmlspecialchars($_SESSION['user_nombre']) : 'Cliente'; ?>.</p>
    </div>

    <?php // Sección de Mensajes Globales ?>
    <?php if (isset($_SESSION['mensaje_exito_global'])): ?>
        <div class="message success"><?php echo htmlspecialchars($_SESSION['mensaje_exito_global']); unset($_SESSION['mensaje_exito_global']); ?></div>
    <?php endif; ?>
    <?php if (isset($_SESSION['mensaje_error_global'])): ?>
        <div class="message error"><?php echo htmlspecialchars($_SESSION['mensaje_error_global']); unset($_SESSION['mensaje_error_global']); ?></div>
    <?php endif; ?>
    <?php if (isset($_SESSION['mensaje_info_global'])): ?>
        <div class="message info"><?php echo htmlspecialchars($_SESSION['mensaje_info_global']); unset($_SESSION['mensaje_info_global']); ?></div>
    <?php endif; ?>

    <div class="dashboard-section">
        <h3>Gestión de Citas</h3>
        <p>Aquí puedes programar nuevas citas o revisar las que ya tienes.</p>
        <ul class="action-list">
            <li><a href="<?php echo BASE_URL; ?>citas/reservar" class="btn btn-primary">Reservar Nueva Cita</a></li>
            <li><a href="<?php echo BASE_URL; ?>mis-citas" class="btn btn-secondary">Ver Mis Citas</a></li>
        </ul>
    </div>
    
    <div class="dashboard-section">
        <h3>Catálogo de Productos/Servicios</h3>
        <p>Explora nuestros productos y servicios.</p>
        <ul class="action-list">
            <li><a href="<?php echo BASE_URL; ?>catalogo" class="btn btn-info">Ver Catálogo</a></li>
        </ul>
    </div>

    
    
    <div class="dashboard-section">
        <h3>Atención al Cliente</h3>
        <p>Envía tus consultas, quejas o reclamos. También puedes ver el historial de tus solicitudes.</p>
        <ul class="action-list">
            <li><a href="<?php echo BASE_URL; ?>atencion-cliente/nueva" class="btn btn-warning">Enviar Nueva Solicitud (PQR)</a></li>
            <li><a href="<?php echo BASE_URL; ?>mis-solicitudes" class="btn btn-secondary">Ver Mis Solicitudes</a></li>
        </ul>
    </div>
</div>

<style>
/* Estilos Comunes para Dashboards (Idealmente en un archivo CSS externo) */
body { font-family: Arial, sans-serif; background-color: #f4f7f6; margin: 0; padding: 0; }
.dashboard-container { max-width: 960px; margin: 20px auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
.dashboard-header { border-bottom: 1px solid #e0e0e0; padding-bottom: 15px; margin-bottom: 20px; }
.dashboard-header h2 { margin-top: 0; color: #333; font-size: 1.8em; }
.dashboard-header p { color: #555; font-size: 0.95em; }

.message { padding: 12px 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 5px; font-size: 0.9em; }
.message.success { color: #155724; background-color: #d4edda; border-color: #c3e6cb; }
.message.error { color: #721c24; background-color: #f8d7da; border-color: #f5c6cb; }
.message.info { color: #0c5460; background-color: #d1ecf1; border-color: #bee5eb; }

.dashboard-section { margin-bottom: 20px; padding: 20px; background-color: #f9f9f9; border: 1px solid #e0e0e0; border-radius: 5px; }
.dashboard-section h3 { margin-top: 0; color: #0056b3; font-size: 1.4em; margin-bottom: 15px; }
.dashboard-section h4 { margin-top: 0; color: #333; font-size: 1.2em; margin-bottom: 10px; }
.dashboard-section p { color: #666; line-height: 1.6; }
.dashboard-section ul { list-style: none; padding: 0; margin: 0; }
.dashboard-section ul.action-list li, 
.dashboard-section ul.notification-list li { margin-bottom: 10px; }
.dashboard-section ul.notification-list a { color: #0056b3; text-decoration: none; }
.dashboard-section ul.notification-list a:hover { text-decoration: underline; }

.notification-section { background-color: #fff3cd; border-color: #ffeeba; }
.notification-section h4, .notification-section a { color: #856404; }
.info-section { background-color: #e2e3e5; border-color: #d6d8db; color: #383d41; }
.info-section p { margin:0; }

.btn { display: inline-block; padding: 10px 18px; font-size: 0.95em; font-weight: bold; color: #fff; background-color: #007bff; border: none; border-radius: 5px; text-align: center; text-decoration: none; transition: background-color 0.3s ease; cursor: pointer; margin-right: 5px; margin-bottom: 5px; }
.btn:hover { opacity: 0.9; }
.btn-primary { background-color: #007bff; }
.btn-secondary { background-color: #6c757d; }
.btn-success { background-color: #28a745; }
.btn-info { background-color: #17a2b8; }
.btn-warning { background-color: #ffc107; color: #212529; }
.btn-danger { background-color: #dc3545; }
.btn-sm { padding: 6px 12px; font-size: 0.85em; }

.stat-card-container { display: flex; justify-content: space-around; flex-wrap: wrap; margin-bottom: 20px; gap: 15px; }
.stat-card { background-color: #f8f9fa; padding: 20px; border-radius: 5px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.05); flex: 1; min-width: 200px; }
.stat-card h4 { font-size: 1em; margin-top:0; margin-bottom: 8px; color: #495057; }
.stat-card p { font-size: 2.2em; margin:0; color: #0056b3; font-weight: bold; }
.badge { display: inline-block; padding: .35em .65em; font-size: .75em; font-weight: 700; line-height: 1; color: #fff; text-align: center; white-space: nowrap; vertical-align: baseline; border-radius: .375rem; margin-left: 5px;}
.bg-danger { background-color: #dc3545 !important; }
</style>