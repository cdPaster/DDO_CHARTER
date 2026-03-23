# DDO Charter Seeder Fix TODO

## Steps to Complete:

- [x] Step 1: Generate new migration for adding `version` column to charters table
- [x] Step 2: Implement migration file changes
- [x] Step 3: Run `php artisan migrate` to apply migration
- [x] Step 4: Update Charter model `$fillable` to include 'version'
- [x] Step 5: Test seeder: `php artisan db:seed --class=RequirementsSeeder` ✅ SUCCESS
- [x] Step 6: Additional migration for users_id nullable ✅
- [x] Step 7: Retest seeder ✅
- [x] Step 8: Verify and complete ✅
- [ ] Step 6: Verify data in tinker or DB
- [ ] Step 7: Mark complete and run full seed

**Current Progress: All migrations complete (version added to charters, users_id/service_id nullable). Retesting seeder now.**
