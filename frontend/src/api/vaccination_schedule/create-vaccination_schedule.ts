/* Owner: App Scaffolder */
import { customFetch } from "../customFetch";
import { IVaccinationSchedule } from "../../interfaces/interfaces";

type IBody = Omit<IVaccinationSchedule, 'id'>;

export const createVaccinationSchedule = async (
  formData: IBody,
): Promise<IBody | undefined> => {
  const result: IBody | undefined = await customFetch.post({
    url: `/vaccination_schedules`,
    body: JSON.stringify(formData),
  });
  return result;
};

