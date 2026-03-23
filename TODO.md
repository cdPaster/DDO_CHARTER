# Fix Services.name column error

1. ✅ Create this TODO.md  
2. ✅ Update app/Models/Service.php $fillable to match DB schema (service_name, etc.)  
3. [ ] Add defaultSort to ServicesTable.php  
4. [ ] Clear caches: php artisan config:clear && php artisan cache:clear  
5. [ ] Verify fix: Services page loads without SQL error
