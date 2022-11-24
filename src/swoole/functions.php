<?php

declare(strict_types=1);

use Swoole\NameResolver;
use Swoole\NameResolver\Context;
use Swoole\Timer\Iterator;

/**
 * Gets the current Swoole version. This information is also available in the predefined constant SWOOLE_VERSION.
 *
 * @return string returns a string containing the version of Swoole
 */
function swoole_version(): string
{
}

/**
 * Gets the number of CPU cores.
 *
 * @return int returns the number of CPU cores
 */
function swoole_cpu_num(): int
{
}

/**
 * Get the error code of the latest failed operation.
 *
 * To translate the error code to an error message, use the following statement:
 *     swoole_strerror(swoole_last_error(), SWOOLE_STRERROR_SWOOLE);
 *
 * @alias This function has an alias method \Swoole\Server::getLastError().
 * @see \Swoole\Server::getLastError()
 * @see swoole_strerror()
 */
function swoole_last_error(): int
{
}

function swoole_async_dns_lookup_coro(mixed $domain_name, float $timeout = 60, int $type = AF_INET): string|false
{
}

function swoole_async_set(array $settings): void
{
}

/**
 * Create a coroutine.
 *
 * @return int|false Returns the coroutine ID on success, or false on failure. Note that this method won't return
 *                   the coroutine ID back until the new coroutine yields its execution.
 * @alias This function has an alias function \go() and an alias method \Swoole\Coroutine::create().
 * @see \go()
 * @see \Swoole\Coroutine::create()
 */
function swoole_coroutine_create(callable $func, ...$params): int|false
{
}

/**
 * Defers the execution of a callback function until the surrounding function of a coroutine returns.
 *
 * @alias This function has an alias function \defer() and an alias method \Swoole\Coroutine::defer().
 * @see \defer()
 * @see \Swoole\Coroutine::defer()
 *
 * @example
 * <pre>
 * swoole_coroutine_create(function () {  // The surrounding function of a coroutine.
 *   echo '1';
 *   swoole_coroutine_defer(function () { // The callback function to be deferred.
 *     echo '3';
 *   });
 *   echo '2';
 * });
 * <pre>
 */
function swoole_coroutine_defer(callable $callback): void
{
}

function swoole_coroutine_socketpair(int $domain, int $type, int $protocol): array|false
{
}

function swoole_test_kernel_coroutine(int $count = 100, float $sleep_time = 1.0): void
{
}

/**
 * @alias This function has an alias function swoole_select().
 * @see swoole_select()
 */
function swoole_client_select(array &$read_array, array &$write_array, array &$error_array, float $timeout = 0.5): int|false
{
}

/**
 * @alias This function is an alias of function swoole_client_select().
 * @see swoole_client_select()
 */
function swoole_select(array &$read_array, array &$write_array, array &$error_array, float $timeout = 0.5): int|false
{
}

/**
 * Set the process name.
 *
 * There isn't a method in Swoole to get the process name. You can use PHP function \cli_get_process_title() to get the process name.
 *
 * @param string $process_name The new process name.
 * @return bool Returns true on success or false on failure.
 * @alias This function has an alias method \Swoole\Process::name().
 * @see \Swoole\Process::name()
 * @see https://www.php.net/cli_set_process_title
 * @see https://www.php.net/cli_get_process_title
 * @pseudocode-included This is a built-in method in Swoole. The PHP code included inside this method is for explanation purpose only.
 */
function swoole_set_process_name(string $process_name): bool
{
    if (PHP_SAPI !== 'cli') {
        // An E_WARNING level error will be thrown out here.
        return false;
    }

    return \cli_set_process_title($process_name);
}

function swoole_get_local_ip(): array
{
}

function swoole_get_local_mac(): array
{
}

/**
 * Get the error message corresponding to the given error code.
 *
 * @param int $errno Error code.
 * @param int $error_type Error type. There are four types of error messages:
 *                        - SWOOLE_STRERROR_SYSTEM: Generic system error message.
 *                        - SWOOLE_STRERROR_GAI: Error message from function call getaddrinfo().
 *                        - SWOOLE_STRERROR_DNS: Error message from network host-related functions.
 *                        - SWOOLE_STRERROR_SWOOLE: Error message of Swoole.
 * @return string Return the error message corresponding to the error code.
 * @see swoole_last_error()
 * @see \Swoole\Server::getLastError()
 */
function swoole_strerror(int $errno, int $error_type = SWOOLE_STRERROR_SYSTEM): string
{
}

function swoole_errno(): int
{
}

function swoole_clear_error(): void
{
}

function swoole_error_log(int $level, string $msg): void
{
}

/**
 * @since 4.8.1
 */
function swoole_error_log_ex(int $level, int $error, string $msg): void
{
}

/**
 * @since 4.8.1
 */
function swoole_ignore_error(int $error): void
{
}

function swoole_hashcode(string $data, int $type = 0): int|false
{
}

/**
 * @since 4.5.0
 */
function swoole_mime_type_add(string $suffix, string $mime_type): bool
{
}

/**
 * @since 4.5.0
 */
function swoole_mime_type_set(string $suffix, string $mime_type): void
{
}

/**
 * @since 4.5.0
 */
function swoole_mime_type_exists(string $filename): bool
{
}

/**
 * @since 4.5.0
 */
function swoole_mime_type_delete(string $suffix): bool
{
}

/**
 * @alias This function has an alias function swoole_get_mime_type().
 * @see swoole_get_mime_type()
 * @since 4.5.0
 */
function swoole_mime_type_get(string $filename): string
{
}

/**
 * @alias This function is an alias of function swoole_mime_type_get().
 * @see swoole_mime_type_get()
 */
function swoole_get_mime_type(string $filename): string
{
}

function swoole_mime_type_list(): array
{
}

function swoole_clear_dns_cache(): void
{
}

function swoole_substr_unserialize(string $str, int $offset, int $length, array $options = []): mixed
{
}

function swoole_substr_json_decode(string $str, int $offset, int $length, bool $associative = false, int $depth = 512, int $flags = 0): mixed
{
}

function swoole_internal_call_user_shutdown_begin(): bool
{
}

/**
 * Get all PHP objects of current call stack.
 *
 * @return array|false Return an array of objects back; return FALSE when no objects exist or when error happens.
 * @since 4.8.1
 */
function swoole_get_objects()
{
}

/**
 * Get status information of current call stack.
 *
 * @return array The array contains two fields: "object_num" (# of objects) and "resource_num" (# of resources).
 * @since 4.8.1
 */
function swoole_get_vm_status()
{
}

/**
 * @return array|false Return the specified object back; return FALSE when no object found or when error happens.
 * @since 4.8.1
 */
function swoole_get_object_by_handle(int $handle)
{
}

function swoole_name_resolver_lookup(string $name, Context $ctx): string
{
}

function swoole_name_resolver_add(NameResolver $ns): bool
{
}

function swoole_name_resolver_remove(NameResolver $ns): bool
{
}

/**
 * @param int $events a SWOOLE_EVENT_READ or SWOOLE_EVENT_WRITE event, or both (SWOOLE_EVENT_READ | SWOOLE_EVENT_WRITE).
 * @alias This function is an alias of method \Swoole\Event::add().
 * @see \Swoole\Event::add()
 */
function swoole_event_add(mixed $fd, ?callable $read_callback = null, ?callable $write_callback = null, int $events = SWOOLE_EVENT_READ): bool
{
}

/**
 * @alias This function is an alias of method \Swoole\Event::del().
 * @see \Swoole\Event::del()
 */
function swoole_event_del(mixed $fd): bool
{
}

/**
 * @param int $events a SWOOLE_EVENT_READ or SWOOLE_EVENT_WRITE event, or both (SWOOLE_EVENT_READ | SWOOLE_EVENT_WRITE).
 * @alias This function is an alias of method \Swoole\Event::set().
 * @see \Swoole\Event::set()
 */
function swoole_event_set(mixed $fd, ?callable $read_callback = null, ?callable $write_callback = null, int $events = 0): bool
{
}

/**
 * @param int $events a SWOOLE_EVENT_READ or SWOOLE_EVENT_WRITE event, or both (SWOOLE_EVENT_READ | SWOOLE_EVENT_WRITE).
 * @alias This function is an alias of method \Swoole\Event::isset().
 * @see \Swoole\Event::isset()
 */
function swoole_event_isset(mixed $fd, int $events = SWOOLE_EVENT_READ | SWOOLE_EVENT_WRITE): bool
{
}

/**
 * @alias This function is an alias of method \Swoole\Event::dispatch().
 * @see \Swoole\Event::dispatch()
 */
function swoole_event_dispatch(): bool
{
}

/**
 * @alias This function is an alias of method \Swoole\Event::defer().
 * @see \Swoole\Event::defer()
 * @see \swoole_timer_after() Add a timer that only runs once after the specified number of milliseconds.
 */
function swoole_event_defer(callable $callback)
{
}

/**
 * @alias This function is an alias of method \Swoole\Event::cycle().
 * @see \Swoole\Event::cycle()
 */
function swoole_event_cycle(?callable $callback, bool $before = false): bool
{
}

/**
 * @alias This function is an alias of method \Swoole\Event::write().
 * @see \Swoole\Event::write()
 */
function swoole_event_write(mixed $fd, string $data): bool
{
}

/**
 * @alias This function is an alias of method \Swoole\Event::wait().
 * @see \Swoole\Event::wait()
 */
function swoole_event_wait(): void
{
}

/**
 * @alias This function is an alias of method \Swoole\Event::exit().
 * @see \Swoole\Event::exit()
 */
function swoole_event_exit(): void
{
}

/**
 * Set runtime options for timers.
 *
 * @param array $settings An array of settings. There is only one option available:
 *                        - \Swoole\Constant::OPTION_ENABLE_COROUTINE: whether to enable coroutine support for timers.
 * @see \Swoole\Timer::set()
 * @see \Swoole\Constant::OPTION_ENABLE_COROUTINE
 * @alias This function is an alias of method \Swoole\Timer::set().
 * @deprecated 4.6.0
 */
function swoole_timer_set(array $settings): void
{
}

/**
 * Add a timer that only runs once after the specified number of milliseconds.
 *
 * This method is different from PHP function sleep() in that it does not block the process when coroutine support is enabled.
 *
 * If coroutine support is enabled, Swoole will create a new coroutine to execute the callback function. Thus, there
 * is no need to create a new coroutine manually in the callback function.
 *
 * After a timer has been added, it can be removed by calling \swoole_timer_clear().
 *
 * @param int $ms The number of milliseconds to wait before the timer is executed.  It must be no less than SWOOLE_TIMER_MIN_MS (1 millisecond).
 * @param callable $callback The callback function to execute when the timer is executed.
 * @param mixed ...$params The parameters to pass to the callback function.
 * @return int|false Returns the timer ID on success, or false on failure.
 * @alias This function is an alias of method \Swoole\Timer::after().
 * @see SWOOLE_TIMER_MIN_MS
 * @see \Swoole\Timer::after()
 * @see \swoole_timer_clear()
 * @see \swoole_timer_clear_all()
 * @see \swoole_event_defer() Defers the execution of a callback.
 */
function swoole_timer_after(int $ms, callable $callback, ...$params): int|false
{
}

/**
 * Add a timer that will run when the specified timer interval has elapsed.
 *
 * If coroutine support is enabled, Swoole will create a new coroutine to execute the callback function. Thus, there
 * is no need to create a new coroutine manually in the callback function.
 *
 * After a timer has been added, it can be removed by calling \swoole_timer_clear().
 *
 * Execution time of the callback function does not affect the next trigger time. In the following example, the
 * timer is set to trigger every 10 ms, and the callback function takes 5 ms to execute. The timer is triggered at
 * 0.000 s for the first time, and finishes at 0.005 s. The next one will be triggered at 0.010 s, but not 0.015 s.
 *
 *     Swoole\Timer::tick(10, function() { // Triggered every 10 ms.
 *         // Assuming the callback function takes 5 ms to execute.
 *     });
 *
 * The actual time between the timer being scheduled and the timer being executed may be longer than the specified
 * interval. A timer may be skipped if the callback function takes too long to execute; in this case, the timer will
 * be triggered again at the next interval. In the following example, the timer is set to trigger every 10 ms, and
 * the callback function takes 12 ms to execute. The timer is triggered at 0.000 s for the first time, and finishes
 * at 0.012 s. The one scheduled at 0.010 s will be skipped, and the next one will be triggered at 0.020 s.
 *
 *     Swoole\Timer::tick(10, function() { // Triggered every 10 ms.
 *         // Assuming the callback function takes 12 ms to execute.
 *     });
 *
 * @param int $ms The timer interval in milliseconds. It must be no less than SWOOLE_TIMER_MIN_MS (1 millisecond).
 * @param callable $callback The callback function to be executed when the timer interval has elapsed.
 * @param mixed $params The parameters to be passed to the callback function.
 * @return int|false Returns the timer ID on success, or false on failure.
 * @alias This function is an alias of method \Swoole\Timer::tick().
 * @see SWOOLE_TIMER_MIN_MS
 * @see \Swoole\Timer::tick()
 * @see \swoole_timer_clear()
 * @see \swoole_timer_clear_all()
 * @see \swoole_event_defer() Defers the execution of a callback.
 */
function swoole_timer_tick(int $ms, callable $callback, ...$params): int|false
{
}

/**
 * Check if the timer exists.
 *
 * @param int $timer_id Timer ID returned by \Swoole\Timer::tick() or \Swoole\Timer::after().
 * @return bool Returns true if the timer exists, otherwise false.
 * @alias This function is an alias of method \Swoole\Timer::exists().
 * @see \Swoole\Timer::exists()
 */
function swoole_timer_exists(int $timer_id): bool
{
}

/**
 * Get the timer information.
 *
 * Timer information returned is in array format, with the following five fields included:
 *   - exec_msec (integer): Relative time of the next execution (in milliseconds).
 *   - exec_count (integer): The number of times the timer has been executed. Added in Swoole 4.8.0.
 *   - interval (integer): The interval of the timer (for timers added via method \Swoole\Timer::tick()).
 *   - round (integer): The number of rounds the underling event loop has been executed when the timer was first added.
 *   - removed (boolean): Whether the timer has been removed.
 *
 * @param int $timer_id Timer ID returned by \Swoole\Timer::tick() or \Swoole\Timer::after().
 * @return array|null Returns an array of timer information, or null if the timer does not exist.
 * @alias This function is an alias of method \Swoole\Timer::info().
 * @see \Swoole\Timer::info()
 */
function swoole_timer_info(int $timer_id): ?array
{
}

/**
 * Get statistics of all timers.
 *
 * This method returns an array with three fields included:
 *   - initialized (boolean): Whether Swoole has been initialized to execute timers.
 *   - num (integer): Number of timers.
 *   - round (integer): The number of rounds the underling event loop has been executed.
 *
 * @return array Returns an array of timer statistics.
 * @alias This function is an alias of method \Swoole\Timer::stats().
 * @see \Swoole\Timer::stats()
 */
function swoole_timer_stats(): array
{
}

/**
 * Get a list of timer IDs of all the timers set in current process.
 *
 * @alias This function is an alias of method \Swoole\Timer::list().
 * @see \Swoole\Timer::list()
 *
 * @example
 * <pre>
 * foreach (swoole_timer_list() as $timerId) {
 *   var_dump(swoole_timer_info($timerId));
 * };
 * <pre>
 */
function swoole_timer_list(): Iterator
{
}

/**
 * Clear a timer in current process.
 *
 * @param int $timer_id Timer ID returned by \Swoole\Timer::tick() or \Swoole\Timer::after().
 * @return bool Returns true on success, false on failure or if the timer does not exist.
 * @alias This function is an alias of method \Swoole\Timer::clear().
 * @see \Swoole\Timer::clear()
 */
function swoole_timer_clear(int $timer_id): bool
{
}

/**
 * Clear all timers set in current process.
 *
 * @return bool Returns true on success, false on failure.
 * @alias This function is an alias of method \Swoole\Timer::clearAll().
 * @see \Swoole\Timer::clearAll()
 */
function swoole_timer_clear_all(): bool
{
}

/**
 * @param $port[required]
 * @param $backlog[optional]
 * @return mixed
 */
function swoole_native_socket_create_listen($port, $backlog = 128)
{
}

/**
 * @param $socket[required]
 * @return mixed
 */
function swoole_native_socket_accept($socket)
{
}

/**
 * @param $socket[required]
 * @return mixed
 */
function swoole_native_socket_set_nonblock($socket)
{
}

/**
 * @param $socket[required]
 * @return mixed
 */
function swoole_native_socket_set_block($socket)
{
}

/**
 * @param $socket[required]
 * @param $backlog[optional]
 * @return mixed
 */
function swoole_native_socket_listen($socket, $backlog)
{
}

/**
 * @param $socket[required]
 * @return mixed
 */
function swoole_native_socket_close($socket)
{
}

/**
 * @param $socket[required]
 * @param $data[required]
 * @param $length[optional]
 * @return mixed
 */
function swoole_native_socket_write($socket, $data, $length = null)
{
}

/**
 * @param $socket[required]
 * @param $length[required]
 * @param $mode[optional]
 * @return mixed
 */
function swoole_native_socket_read($socket, $length, $mode = 2)
{
}

/**
 * @param $socket[required]
 * @param $address[required]
 * @param $port[optional]
 * @return mixed
 */
function swoole_native_socket_getsockname($socket, &$address, &$port = null)
{
}

/**
 * @param $socket[required]
 * @param $address[required]
 * @param $port[optional]
 * @return mixed
 */
function swoole_native_socket_getpeername($socket, &$address, &$port = null)
{
}

/**
 * @param $domain[required]
 * @param $type[required]
 * @param $protocol[required]
 * @return mixed
 */
function swoole_native_socket_create($domain, $type, $protocol)
{
}

/**
 * @param $socket[required]
 * @param $address[required]
 * @param $port[optional]
 * @return mixed
 */
function swoole_native_socket_connect($socket, $address, $port = null)
{
}

/**
 * @param $error_code[required]
 * @return mixed
 */
function swoole_native_socket_strerror($error_code)
{
}

/**
 * @param $socket[required]
 * @param $address[required]
 * @param $port[optional]
 * @return mixed
 */
function swoole_native_socket_bind($socket, $address, $port)
{
}

/**
 * @param $socket[required]
 * @param $data[required]
 * @param $length[required]
 * @param $flags[required]
 * @return mixed
 */
function swoole_native_socket_recv($socket, &$data, $length, $flags)
{
}

/**
 * @param $socket[required]
 * @param $data[required]
 * @param $length[required]
 * @param $flags[required]
 * @return mixed
 */
function swoole_native_socket_send($socket, $data, $length, $flags)
{
}

/**
 * @param $socket[required]
 * @param $data[required]
 * @param $length[required]
 * @param $flags[required]
 * @param $address[required]
 * @param $port[optional]
 * @return mixed
 */
function swoole_native_socket_recvfrom($socket, &$data, $length, $flags, &$address, &$port = null)
{
}

/**
 * @param $socket[required]
 * @param $data[required]
 * @param $length[required]
 * @param $flags[required]
 * @param $address[required]
 * @param $port[optional]
 * @return mixed
 */
function swoole_native_socket_sendto($socket, $data, $length, $flags, $address, $port = null)
{
}

/**
 * @param $socket[required]
 * @param $level[required]
 * @param $option[required]
 * @return mixed
 */
function swoole_native_socket_get_option($socket, $level, $option)
{
}

/**
 * @param $socket[required]
 * @param $level[required]
 * @param $option[required]
 * @param $value[required]
 * @return mixed
 */
function swoole_native_socket_set_option($socket, $level, $option, $value)
{
}

/**
 * @param $socket[required]
 * @param $level[required]
 * @param $option[required]
 * @return mixed
 */
function swoole_native_socket_getopt($socket, $level, $option)
{
}

/**
 * @param $socket[required]
 * @param $level[required]
 * @param $option[required]
 * @param $value[required]
 * @return mixed
 */
function swoole_native_socket_setopt($socket, $level, $option, $value)
{
}

/**
 * @param $socket[required]
 * @param $mode[optional]
 * @return mixed
 */
function swoole_native_socket_shutdown($socket, $mode = 2)
{
}

/**
 * @param $socket[optional]
 * @return mixed
 */
function swoole_native_socket_last_error($socket = null)
{
}

/**
 * @param $socket[optional]
 * @return mixed
 */
function swoole_native_socket_clear_error($socket = null)
{
}

/**
 * @param $stream[required]
 * @return mixed
 */
function swoole_native_socket_import_stream($stream)
{
}

/**
 * @param $handle[required]
 * @return mixed
 */
function swoole_native_curl_close($handle)
{
}

/**
 * @param $handle[required]
 * @return mixed
 */
function swoole_native_curl_copy_handle($handle)
{
}

/**
 * @param $handle[required]
 * @return mixed
 */
function swoole_native_curl_errno($handle)
{
}

/**
 * @param $handle[required]
 * @return mixed
 */
function swoole_native_curl_error($handle)
{
}

/**
 * @param $handle[required]
 * @return mixed
 */
function swoole_native_curl_exec($handle)
{
}

/**
 * @param $handle[required]
 * @param $option[optional]
 * @return mixed
 */
function swoole_native_curl_getinfo($handle, $option = null)
{
}

/**
 * @param $url[optional]
 * @return mixed
 */
function swoole_native_curl_init($url = null)
{
}

/**
 * @param $handle[required]
 * @param $option[required]
 * @param $value[required]
 * @return mixed
 */
function swoole_native_curl_setopt($handle, $option, $value)
{
}

/**
 * @param $handle[required]
 * @param $options[required]
 * @return mixed
 */
function swoole_native_curl_setopt_array($handle, $options)
{
}

/**
 * @param $handle[required]
 * @return mixed
 */
function swoole_native_curl_reset($handle)
{
}

/**
 * @param $handle[required]
 * @param $string[required]
 * @return mixed
 */
function swoole_native_curl_escape($handle, $string)
{
}

/**
 * @param $handle[required]
 * @param $string[required]
 * @return mixed
 */
function swoole_native_curl_unescape($handle, $string)
{
}

/**
 * @param $handle[required]
 * @param $flags[required]
 * @return mixed
 */
function swoole_native_curl_pause($handle, $flags)
{
}

/**
 * @param $multi_handle[required]
 * @param $handle[required]
 * @return mixed
 */
function swoole_native_curl_multi_add_handle($multi_handle, $handle)
{
}

/**
 * @param $multi_handle[required]
 * @return mixed
 */
function swoole_native_curl_multi_close($multi_handle)
{
}

/**
 * @param $multi_handle[required]
 * @return mixed
 */
function swoole_native_curl_multi_errno($multi_handle)
{
}

/**
 * @param $multi_handle[required]
 * @param $still_running[required]
 * @return mixed
 */
function swoole_native_curl_multi_exec($multi_handle, &$still_running)
{
}

/**
 * @param $multi_handle[required]
 * @param $timeout[optional]
 * @return mixed
 */
function swoole_native_curl_multi_select($multi_handle, $timeout = 1.0)
{
}

/**
 * @param $multi_handle[required]
 * @param $option[required]
 * @param $value[required]
 * @return mixed
 */
function swoole_native_curl_multi_setopt($multi_handle, $option, $value)
{
}

/**
 * @param $handle[required]
 * @return mixed
 */
function swoole_native_curl_multi_getcontent($handle)
{
}

/**
 * @param $multi_handle[required]
 * @param $queued_messages[optional]
 * @return mixed
 */
function swoole_native_curl_multi_info_read($multi_handle, &$queued_messages = null)
{
}

/**
 * @return mixed
 */
function swoole_native_curl_multi_init()
{
}

/**
 * @param $multi_handle[required]
 * @param $handle[required]
 * @return mixed
 */
function swoole_native_curl_multi_remove_handle($multi_handle, $handle)
{
}
